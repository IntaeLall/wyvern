# WP REST

## Contents

Default plugins:
* [ACF Pro][acf]
* [Akismet][akismet]
* [Captcha][captcha]
* [CPT UI][cptui]
* [MailPoet Newsletters][mailpoet]
* [Relative URL][relative-url]
* [WordPress REST API][rest-api]
* [WP API Menus][wp-api-menus]
* [wpMandrill][wpmandrill]


## Settings

### Database

```
DB_NAME=database
DB_HOST=localhost
DB_USER=root
DB_PASSWORD=
DB_CHARSET=utf8
DB_COLLATE=
```

### ACF Pro
Set the environment variable **`ACF_PRO_KEY`** to your [ACF PRO key][acf-account]. This will be used by composer to load ACF.
```
ACF_PRO_KEY=YOUR_ACF_KEY_HERE
```

### Mandrill

```
MANDRILL_KEY=YOUR_MANDRILL_KEY_HERE
```


[acf-account]: https://www.advancedcustomfields.com/my-account/
[akismet]: https://wordpress.org/plugins/akismet/
[captcha]: https://wordpress.org/plugins/captcha/
[rest-api]: https://wordpress.org/plugins/rest-api/
[wp-api-menus]: https://wordpress.org/plugins/wp-api-menus/
[relative-url]: https://wordpress.org/plugins/relative-url/
[wpmandrill]: https://wordpress.org/plugins/wpmandrill/
[mailpoet]: https://wordpress.org/plugins/wysija-newsletters/
[acf]: https://wordpress.org/plugins/advanced-custom-fields/
[cptui]: https://wordpress.org/plugins/custom-post-type-ui/