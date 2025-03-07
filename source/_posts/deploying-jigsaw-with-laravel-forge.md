---
extends: _layouts.post
section: content
title: Deploying Jigsaw with Laravel Forge to supported VPS
date: 2025-03-07
description: A quick guide to deploy Jigsaw using Laravel Forge.
cover_image: https://res.cloudinary.com/langitlupakintoncloud/image/upload/v1741330277/hugo/jcos.io/hblhxvctfpm23eur7chd.jpg
featured: true
categories: [ dev ]
---

## Set up

This guide assumes that you already have a Jigsaw site ready for deployment and a new site installed in Forge.

Should work with any of the supported VPS provider.

I usually use either AWS or DigitalOcean for my projects.

## Guide

1. Add npm commands in the deployment script.

Go to **Deployments** then add the 2 lines below.

#### Deployment Script

```
cd /your/forge/app # your site path
git pull origin $FORGE_SITE_BRANCH

## Add these lines to your deployment script
npm install
npm run prod

$FORGE_COMPOSER install --no-dev --no-interaction --prefer-dist --optimize-autoloader
```

2. Next is to update the public folder to use the generated build_production path.

Go to **Settings** then update the value of **Web Directory** to **/build_production**

3. Make sure to update your Jigsaw config to use your domain in **config.production**.

#### config.production

```
<?php

return [
    'baseUrl' => 'https://blog.jcos.io', // Change this part
    'production' => true,
];

```

4. Add in SSL from Forge.

 - Go to **SSL**
 - Select your certificate to use, I went with **Let's Encrypt**
 - Double check the values in the domains field. I usually remove www. values and only go with the base domain.

   > TODO: Fix this later
   
   ![SSL domains](https://res.cloudinary.com/langitlupakintoncloud/image/upload/v1741333369/hugo/jcos.io/unqyqu60ttljefno2nem.png)
 - Submit and wait for a few moment to install certificate

That's pretty much it.

This site here is the end product.
   
Maybe I'll write the reason for using Jigsaw on another time.

Hope this helps, bye.
