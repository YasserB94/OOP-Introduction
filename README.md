#Object Oriented Programmign with PHP
##Introduction

**FINALLY!!!!!! Thinking in objects!!!!!**
This repository contains 7 learning exercises provided by BeCode to learn Object Oriented Programming in PHP.

###The Start
I don't like to fight my browser while trying to change a URL in the address bar.
So I setup my homepage(index.php) with a little switch (Thank you BeCode coaches senpais for injecting the idea into my head).
Yay, now I can get to the pages easely by typing in their names on the homepage.
I feel like a real programmer now, spend an hour to build a script that prevents me to do a task that probably would take 1/10th of the time.

###The Class
I'll cry when this gets messy, so let's create the class file externally.
But require does not seem the right way to go.
Thank you once again [w3Schools](https://www.w3schools.com/php/php_includes.asp).
>Use require when the file is required by the application.
>Use include when the file is not required and application should continue when file is not found.
Now what is this include_once thingy I heard about ?
> It provides us with a feature that if a code from a PHP file is already included in a specified file then it will not include that code again.
That sounds awesome, I'm loving PHP it's all built in :D
Things like:
```php
__DIR__
```
for the path name are also just awesome features
Allright, all setup to tackle the exercises without ending up with a bunch of copy pasted code and a heap of spagetthi in every single file.

###Classes
After using these awesome things called classes in JavaScript this sounds like music to my ears.
Once again kudos to the BeCode coaches for helping me to walk before I start running.
$this->once seemed easy enough, altough I really miss the JS syntax where I could just use a . to access properties and methods!

###Extending
Yaay this also kind-of works like other languages, the research and extra study hours are really paying off here.
What's that whisper I heard for the x'd time ? 
> I'm more a printer kidn of guy ?
```php
print_r($value)
```
> print_r — Prints human-readable information about a variable
Allrighty, human readable. I am kind of human! Goodbye echo, I'll see you when I need you.
Ah, hello echo! c'mon PHP, I said I liked you! why don't you give me an easy way to add line breaks between my messy print_r's ={

Ah, for the actual exercise, I can't print the alcoholPercentage in 2 different ways because it hurts my heart to make it public. And I don't want to interfere with my new found love for PHP!

###Private
Mhhhmmm I'm loving this external classfile, no copy pasta. And my stuborness on the previous exercise made this work on it's own :D
This made me chuckle tough! would they notice ? :p
>Make sure that you use the variables and not just this text line.

###Protected
Interesting, now I know them all! :D
1. Public Scope
> It's available everywhere
2. Private Scope
> It's only available within the class itself
3. Protected Scope
> It's available within the class itself, classes that extend it **AND** it's parent(s)

---For Future reference if I need it -> Can be accessed by: table
|   |**Public**|**Protected**|**private**|
|---|----------|-------------|-----------|
|The class that declared it|True|True|True|
|The classes that inherit from the class that declared it|True|True|False|
|Foreign elements outside of the class|True|False|False|

Stackoverflow seems like a battlefield of _I can explain it better_ on this héhé glad to have it here.

###Public
See->Protected
I couldn't do this exercies, once more it hurts me to make properties public even if it would 'fix' the code =p Getters and setters 4Laife.

###Const
Whoo, being a nuisance with a bunch of questions to the coaches is paying off again hurhurhur.
Let me scroll back up in my discord conversation with Sicco, time to copy pasta dat nice 
```php
define ('MY_CONSTANT', "This is a constant string.");
$constantName = 'MY_CONSTANT';
```
I am guessing this was to learn that constants have a global scope ?

###Static
>Declaring class properties or methods as static makes them accessible without needing an instantiation of the class. These can also be accessed statically within an instantiated class object.
The syntax for this is so fugly =[
I think I got this right, so the class can actually do things too ! cool :D
- Statics are property of the class, not of the object instantiated from it.
- Only use this if I need the method/property without creating an object

###Extra - Code Sanitization
I'll update this once I make it out of this rabbithole 

**I hope you have a wonderfull day**