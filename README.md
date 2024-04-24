# Featured Image From First Image

This plugin automatically sets the first image attached to a post as the featured image, if one is not already set. It's designed to ensure that posts always have a visually engaging featured image without requiring manual configuration, which is especially useful for content-heavy blogs and websites.

## Installation

1. Download this plugin by cloning this repository or downloading it as a ZIP file.
2. Upload the `featured-image-from-first-image` directory to your WordPress installation's `/wp-content/plugins/` directory.
3. Activate the plugin through the 'Plugins' menu in WordPress.

## Usage

Once activated, the plugin works automatically. It listens for post saves and updates through various WordPress actions and sets the first uploaded image as the featured image for posts without one. The following actions are covered:

- `the_post`
- `save_post`
- `draft_to_publish`
- `new_to_publish`
- `pending_to_publish`
- `future_to_publish`

These hooks ensure that the featured image is set during the creation and publication process of posts.
