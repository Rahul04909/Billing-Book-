<?php

defined('BASEPATH') or exit('No direct script access allowed');

/*  | -------------------------------------------------------------------  |  Stripe API Configuration  | -------------------------------------------------------------------  |  | You will get the API keys from Developers panel of the Stripe account  | Login to Stripe account (https://dashboard.stripe.com/)  | and navigate to the Developers >> API keys page  |  |  stripe_api_key            string   Your Stripe API Secret key.  |  stripe_publishable_key    string   Your Stripe API Publishable key.  |  stripe_currency           string   Currency code.  */

$config['stripe_secret_key'] = getenv('STRIPE_SECRET_KEY');
$config['stripe_publishable_key'] = getenv('STRIPE_PUBLIC_KEY');

$config['stripe_currency'] = 'usd';