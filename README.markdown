TwitBook
========
Version 1.0
-----------

Author: [Dan Chilton](http://www.danchilton.com)

Description
-----------

A jQuery plugin that allows you to insert Facebook likes, tweets, and Delicious bookmark counts anywhere within your markup.

Usage
-----

This plugin can be used on any element, as long as the element satisfies these requirements:

1. It has a class that gets instantiated by `TwitBook()`
2. It has a `data-tb-url` attribute with the URL you want to check
3. It has a `data-tb-type` attribute that specifies the network you'd like to use
4. It has a child element with the class `tb-count`, where the number will appear

Example
-------

On your page:

    <div class="tb-link" data-tb-url="http://www.example.com" data-tb-type="facebook">
      Facebook (<span class="tb-count"></span>)
    </div>

And then in your javascript:

    $(document).ready(function(){
      $('.tb-link').TwitBook();
    });

Types (data-tb-type)
--------------------

* **Facebook** - data-tb-type="facebook"
* **Twitter** - data-tb-type="twitter"
* **Delicious** - data-tb-type="delicious"