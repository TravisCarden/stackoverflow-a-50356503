# Symfony Console w/ Dependency Injection POC

This repo is a proof of concept of https://stackoverflow.com/a/50356503/895083. Last tested 11/20/2019.

# Relevant Components

- [App Kernel](app/AppKernel.php)
- [Services Definition](config/services.yml)
- [Bin File](index.php)

# Usage

```bash
$ php index.php test
Automatically injected App\Thing!
```
