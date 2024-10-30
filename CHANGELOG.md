# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [1.3.0] - TBA

### Updates
>- composer.json
>  - accept `Symfony 5.* , 6.* and 7.*`
>  - removed doctrine/annotations
>- default.yml config

### Fixes
>- Fixed the tests, load `simple_html_dom into` the container

### Deprecations
>- add return type :void to ::load()
>- add return types to methods of `class AppKernel` which extends `Kernel`