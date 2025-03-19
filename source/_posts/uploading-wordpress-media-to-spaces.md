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

As Jamstack gets popular in recent years, a headless WordPress install is seeing considerations when developers are looking for out of the box API.

I personally use this setup when I just want to have a quick API ready.

WordPress base install is good but plugins to do something is one of the reason I stopped using it back in the day.

Hated those plugins man, you have to work around critical plugins and pay for "**PRO**" features you can just code yourself.

So for just out of the box cms features as API it is a solution to consider.

## Set up

Requires a working WordPress install with access to functions.php.

Works with [regular install](https://wordpress.org/download/) and [Bedrock](https://roots.io/bedrock/).

## Guide

1. Add the codes below into your functions.php

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

> What's nice with this code is this will work for either Amazon S3 or DigitalOcean Spaces.

2. Replace hard coded credentials with env variables. (OPTIONAL)

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

If you are using a setup with .env variables for example [Bedrock](https://roots.io/bedrock/).

You can get the credentials by using `$_SERVER['YOUR_S3_SPACES_ENV_VARIABLE']`.

That's pretty much it.

Your uploads will now use the storage bucket.

## Why not just use the wp-uploads in your local install?

One major reason is that when I change servers or you need to backup a WordPress install, the media files are a pain to migrate.

In the past I used plugins like [WP Offload Media](https://deliciousbrains.com/wp-offload-media/) but the pricing is ridiculous for my tastes.

So you can just copy the code above and save yourself some money.

If for any reason you still want to spend you can always [support me](/support/) and buy one of my special [Buyer's Remorse](/support/)(Starting from $1).

> Thank you!  
> I removed some customizations I used so let me know if you are encountering issues in the comments.
 
The featured image is a little pixelated but I guess that's ok.

Hope this helps, bye. 
