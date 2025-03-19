---
extends: _layouts.post
section: content
title: How to Use AWS S3 or DigitalOcean Spaces for WordPress Media (No Plugin Needed)
date: 2025-03-19
description: A quick guide to user S3 or Spaces as media library in WordPress.
cover_image: https://res.cloudinary.com/langitlupakintoncloud/image/upload/v1742379859/hugo/jcos.io/jj4w4nfq5fbjqdmd4o93.png
featured: true
categories: [ dev ]
---

## Introduction

As Jamstack grows in popularity, a headless WordPress setup is becoming a viable option for developers who need an out-of-the-box API.

Personally, I use this setup when I just want a quick, ready-to-go API.

WordPress is solid at its core, but I’ve always disliked relying on plugins—especially those that lock basic features behind **"PRO"** versions.

For a simple CMS with an API, this is a setup worth considering.

## Set up

You'll need a working WordPress install with access to functions.php.

This works with both:

- [Regular WordPress installs](https://wordpress.org/download/)
- [Bedrock](https://roots.io/bedrock/)

## Guide

1. Add this code to functions.php

#### functions.php

```
// Update upload directory
add_filter('upload_dir', function ($upload) {
    $upload['basedir'] = ''; // Clear the local directory path
    $upload['baseurl'] = 'YOUR_S3_SPACES_ENDPOINT' . '/' . 'YOUR_S3_SPACES_BUCKET_NAME'; // Set the base URL to your bucket
    return $upload;
});

add_filter('wp_handle_upload', function ($upload) {
    // DigitalOcean Spaces or AWS S3 credentials
    $bucket = 'YOUR_S3_SPACES_BUCKET_NAME';
    $key = 'YOUR_S3_SPACES_ACCESS_KEY';
    $secret = 'YOUR_S3_SPACES_ACCESS_SECRET';
    $region = 'YOUR_S3_SPACES_REGION';
    $endpoint = 'YOUR_S3_SPACES_ENDPOINT';

    // Create an S3 client
    $s3Client = new S3Client([
        'version' => 'latest',
        'region' => $region,
        'endpoint' => $endpoint,
        'credentials' => [
            'key' => $key,
            'secret' => $secret,
        ],
    ]);

    // Prepare the file for upload
    $filePath = $upload['file'];

    $fileName = 'YOUR_S3_SPACES_PATH' . '/' . basename($filePath);

    try {
        // Upload the file
        $result = $s3Client->putObject([
            'Bucket' => $bucket,
            'Key' => $fileName,
            'SourceFile' => $filePath,
            'ACL' => public-read, // Use the determined ACL, public for now
        ]);

        $fileType = $upload['type'];

        // Delete the local file after confirming S3 upload
        unlink($upload['file']);

        // Return the new file info
        return [
            'file' => $result['ObjectURL'], // URL of the uploaded file
            'url' => $result['ObjectURL'],  // URL of the uploaded file
            'type' => $fileType,       // Keep the original file type
        ];
    } catch (AwsException $e) {
        // Handle upload error
        error_log($e->getMessage());

        return $upload; // Return original upload data to avoid breaking the upload process
    }
});
```

> This setup works for both Amazon S3 and DigitalOcean Spaces.

2. Use Environment Variables (Optional, But Recommended)

For better security, replace hardcoded credentials with environment variables:

#### functions.php

```
add_filter('wp_handle_upload', function ($upload) {
    // DigitalOcean Spaces or AWS S3 credentials
    $bucket = $_SERVER['YOUR_S3_SPACES_BUCKET_NAME'];
    $key = $_SERVER['YOUR_S3_SPACES_ACCESS_KEY'];
    $secret = $_SERVER['YOUR_S3_SPACES_ACCESS_SECRET'];
    $region = $_SERVER['YOUR_S3_SPACES_REGION'];
    $endpoint = $_SERVER['YOUR_S3_SPACES_ENDPOINT'];
    
    ...
```

If you're using a .env setup like [Bedrock](https://roots.io/bedrock/), you can reference credentials like this:

```
$_SERVER['YOUR_S3_SPACES_ENV_VARIABLE']
```

And that's it! Your WordPress uploads will now be stored in the cloud instead of your local server.

## Why not just use the wp-uploads in your local install?

Two main reasons:

1. Easier Server Migrations & Backups – No need to manually transfer bulky media files when changing hosts.
2. No Need for Expensive Plugins – I used to use [WP Offload Media](https://deliciousbrains.com/wp-offload-media/pricing/), but their pricing is way too high for my taste.

Instead, you can just copy this code and save some cash.

Or, if you still feel like spending, you can [support me](/support/) and buy my ["Buyer's Remorse"](/support/) package (starting at just $1).

> Thanks for reading! If you run into any issues, drop a comment.

P.S. Yeah, I know the featured image is a bit pixelated, but oh well.

Hope this helps—bye!
