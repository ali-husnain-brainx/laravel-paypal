# How to integrate PayPal payment gateway in Laravel

1. Create a paypal sandbox(for testing) or used an existing account
2. Create an app in paypal account and used its ‘Client_id’ and ‘Secret key’ in your project ‘.env’ file.
3. Create a new project or used existing
4. Open project terminal and install PayPal SDK using composer ‘composer require paypal/rest-api-sdk-php’
5. Create a file in a config folder and named as ‘paypal.php’ Take code form this project file and past in your file.
6. Create a Controller for payment handing and paste these code in your payment controller and take code from this project controller.
7. Create any form for payment and used post route form ‘web.php’ and Paste two routes in ‘web.php’ take them form this ptoject file.



## Or if you want test this project simple clone and follow below instructions
1. Take 'Client id' and 'Secret key' from your paypal account app and past in .env file
2. Run this project and test.

