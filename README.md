# Disable Customer Registration

Module for Magento 2 which provide a possibility disable customer registration on Front End. Create customer from Admin still available

## Installation

1. Go to Magento 2 root directory

2. Enter following commands to install module:

   ```
   composer require maxmage/disable-registration
   ```

   Wait while dependencies are updated.

3. Enter following commands to enable module:

   ```
   php bin/magento module:enable MaxMage_DisableRegistration
   php bin/magento setup:upgrade
   php bin/magento setup:di:compile
   php bin/magento cache:clean
   ```
## Configuration

5. Enable the Disable Registration module in Magento Admin under *Stores* >
   *Configuration* > *Customers* > *Disable Registration*.

    **Enabled module automatically disable customer Registration**

    ![Disable/Enable Customer Registration](https://i.imgur.com/muooFwm.png "Disable/Enable Customer Registration")


Default Magento Customer login page with an ability registration, the result before module activation

![Customer Page Login Page before module activation](https://i.imgur.com/T4IsN6T.png "Customer Page Login Page before module activation")

After activation "Disable Customer Registration" module, for visitors will not available registration block and visit by registration link will be automatically redirected to login page

![Customer Page Login Page after module activation](https://i.imgur.com/TsI0VrH.png "Customer Page Login Page after module activation")
