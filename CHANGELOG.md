# Changelog
All Notable changes to `oauth2-instagram` will be documented in this file

## 3.0.0 - 2020-02-25

### Added
- Support for Instagram Basic Display API
  - get Resource Owner Details from https://graph.instagram.com/me
  - changed default scopes to `['user_profile']`
- Custom host configuration for Graph API host

### Deprecated
- Nothing

### Fixed
- Nothing

### Removed
- Support for Instagram Legacy API (https://api.instagram.com/v1/...)
- Short-hand functions for now removed attributes
  - `InstagramResourceOwner::getImageUrl()`
  - `InstagramResourceOwner::getName()`
  - `InstagramResourceOwner::getDescription()`

### Security
- Nothing

## 2.0.0 - 2017-01-25

### Added
- PHP 7.1 Support

### Deprecated
- Nothing

### Fixed
- Nothing

### Removed
- PHP 5.5 Support

### Security
- Nothing

## 1.0.0 - 2017-01-25

Bump for base package parity

## 0.2.3 - 2016-12-22

### Added
- Custom host configuration

### Deprecated
- Nothing

### Fixed
- Nothing

### Removed
- Nothing

### Security
- Nothing

## 0.2.2 - 2016-04-13

### Added
- Refactored exception handling

### Deprecated
- Nothing

### Fixed
- Nothing

### Removed
- Nothing

### Security
- Nothing

## 0.2.1 - 2015-11-23

### Added
- A properly functioning `getAuthenticatedRequest()` for Instagram.com
- Modification for data returned by InstagramResourceOwner::toArray

### Deprecated
- Nothing

### Fixed
- Nothing

### Removed
- Nothing

### Security
- Nothing

## 0.2.0 - 2015-08-20

### Added
- Upgrade to support version 1.0 release of core client

### Deprecated
- Nothing

### Fixed
- Nothing

### Removed
- Nothing

### Security
- Nothing

## 0.1.2 - 2015-06-17

### Added
- Using abstract provider scope separator to format scopes

### Deprecated
- Nothing

### Fixed
- Nothing

### Removed
- Nothing

### Security
- Nothing

## 0.1.1 - 2015-06-17

### Added
- Improved clarity to README around expectation of managing scopes

### Deprecated
- Nothing

### Fixed
- Nothing

### Removed
- Nothing

### Security
- Nothing

## 0.1.0 - 2015-04-08

### Added
- Initial release!

### Deprecated
- Nothing

### Fixed
- Nothing

### Removed
- Nothing

### Security
- Nothing
