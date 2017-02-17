<?php
/*
MIT License

Copyright (c) 2017 Martin Dreier

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
*/
$config = array(

	//Set the Dropbox app key and app secret
	'dropbox_app_key'		=> "<app key>",
	'dropbox_app_secret'	=> "<app secret>",

	//Proxy configuration
	'proxy_url'				=> '',
	'proxy_user'			=> '',
	'proxy_password'		=> '',

	//Path to the working directory for caches and tokens
	'working_directory' 	=> dirname(__FILE__) . '/work',

	//Search parameters
	'result_size'			=> 25,
	'search_path'			=> array('/Apps/Hero Lab')
);

?>
