Upgrade instruction
===================

This document describes the changes needed when upgrading because of a BC
break. For the full list of changes, please look at the Changelog file.

## 2.0.0-alpha3 to 2.0.0-alpha4

Methods and properties removed from `FOS\UserBundle\Model\User`

- `$expired`
- `$credentialsExpired`
- `setExpired()` (use `setExpiresAt(\DateTime::now()` instead)
- `setCredentialsExpired()` (use `setCredentialsExpireAt(\DateTime::now()` instead)

You need to drop the fields `expired` and `credentials_expired` from your database
schema, because they aren't mapped anymore.

### LoginManager

The signature of the LoginManager constructor has changed.

Before:

```php
class LoginManager
{
    public function __construct(
        TokenStorageInterface $tokenStorage,
        UserCheckerInterface $userChecker,
        SessionAuthenticationStrategyInterface $sessionStrategy,
        ContainerInterface $container
    );
}
```

After:

```php
class LoginManager
{
    public function __construct(
        TokenStorageInterface $tokenStorage,
        UserCheckerInterface $userChecker,
        SessionAuthenticationStrategyInterface $sessionStrategy,
        RequestStack $requestStack,
        RememberMeServicesInterface $rememberMeService = null
    );
}
```

### Templates

Following Symfony coding standards template names are now lowercase. Please
rename if you use custom templates.

Before:

```php
public function checkEmailAction()
{
    return $this->render('FOSUserBundle:Registration:checkEmail.html.twig');
}
```

After:

```php
public function checkEmailAction()
{
    return $this->render('FOSUserBundle:Registration:check_email.html.twig');
}
```

### UserListener

The signature of the UserListener constructor has changed and now requires an
implementation of `PasswordUpdaterInterface` and `CanonicalFieldsUpdater`.

Before:

```php
class UserListener
{
    public function __construct(ContainerInterface $container);
}

```

After:

```php
class UserListener
{
    public function __construct(
        PasswordUpdaterInterface $passwordUpdater,
        CanonicalFieldsUpdater $canonicalFieldsUpdater
    );
}
```

### UserManager

The public methods `refreshUser`, `loadUserByUsername` and `supportsClass` have been
removed. Please use the UserProvider instead.

Before:

```php
$userManager->refreshUser($user);
$userManager->loadUserByUsername($username);
$userManager->supportsClass($class);

```

After:

```php
$userProvider->refreshUser($user);
$userProvider->loadUserByUsername($username);
$userProvider->supportsClass($class);

```

The signature of the UserManager constructor has changed and now requires an
implementation of `PasswordUpdaterInterface` and `CanonicalFieldsUpdater`.

Before:

```php
class UserManager
{
    public function __construct(
        EncoderFactoryInterface $encoderFactory,
        CanonicalizerInterface $usernameCanonicalizer,
        CanonicalizerInterface $emailCanonicalizer
    );
}
```

After:

```php
class UserManager
{
    public function __construct(
        PasswordUpdaterInterface $passwordUpdater,
        CanonicalFieldsUpdater $canonicalFieldsUpdater
    );
}
```

### Validator

The signature of the Validator Initializer constructor has changed and now
requires an implementation of `CanonicalFieldsUpdater`.

Before:

```php
class Initializer
{
    public function __construct(UserManagerInterface $userManager);
}
```

After:

```php
class Initializer
{
    public function __construct(CanonicalFieldsUpdater $canonicalFieldsUpdater);
}
```

## 1.3 to 2.0.0-alpha1

### User Provider

Using the UserManager as a user provider is no longer supported and is
deprecated. Change your security.yml's provider section to look like:

```yml
security:
    # ...
    providers:
        fos_userbundle:
            id: fos_user.user_provider.username
```

### Configuration

The XML namespace is changed from `http://example.org/schema/dic/fos_user` to
`http://friendsofsymfony.github.io/schema/dic/user`.

### User and Group class

This bundle now [registers mappings](http://symfony.com/doc/master/cookbook/doctrine/mapping_model_classes.html)
for the classes in the Model namespace directly, instead
of having empty extending classes. The User and Group classes in the Entity and
Document namespaces are deprecated, you should update your User and Group
classes to extend the classes found in `Model`.
The old classes will are still available for now, but throw deprecated warnings. They will be removed
in the next alpha.

## 1.3.4 to 1.3.5

The characters used in generated tokens have changed. They now include dashes
and underscores as well. Any routing requirement matching them should be
updated to ``[\w\-]+``.

Before:

```yaml
my_route:
    path: /{token}
    requirement:
        token: \w+
```

After:

```yaml
my_route:
    path: /{token}
    requirement:
        token: '[\w\-]+'
```

## 1.2 to 1.3

### Forms

The profile form no longer wraps the user in a CheckPassword class. If you
were overriding the form handler, you will need to update it to pass the
user object directly.

### Groups

The `FOS\UserBundle\Model\GroupableInterface` interface now expects the `getGroups`
method to return a Traversable instead of expecting a Doctrine Collection.
Doctrine-based implementation are unchanged but the Propel implementation
now returns the PropelCollection instead of wrapping it.

### Manager classes

The different Doctrine-based manager classes are deprecated and will be removed
in 2.0 in favor of the common implementation. If you were extending the UserManager
class for a Doctrine implementation, you need to change the parent class
to `FOS\UserBundle\Doctrine\UserManager`.

### Propel implementation

The Propel backend does not require the UserProxy anymore as the UserInterface
is now implementated on the model itself. you will have to change your config:

Before:

```yaml
fos_user:
    user_class: FOS\UserBundle\Propel\UserProxy
    propel_user_class: FOS\UserBundle\Propel\User
```

After:

```yaml
fos_user:
    user_class: FOS\UserBundle\Propel\User
```

### Token generation

The generation of the token is not done by the User class anymore. If you
were using the `generateToken` or `generateConfirmationToken` in your own
code, you need to use the `fos_user.util.token_generator` service to generate
the token.

## 1.1 to 1.2

This file describes the needed changes when upgrading from 1.1 to 1.2

### Removed the user-level algorithm.

If you are experiencing the exception
`No encoder has been configured for account "Acme\DemoBundle\Entity\User"`
after upgrading, please consider the following.

The encoder now needs to be configured in the SecurityBundle configuration
as described in the official documentation. If you were using the default
value of the bundle, the config should look like this to reuse the same settings:

```yaml
#app/config/security.yml
security:
    encoders:
        "FOS\UserBundle\Model\UserInterface":
            algorithm: sha512
            encode_as_base64: false
            iterations: 1
```
