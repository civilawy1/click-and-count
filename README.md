# Click And Count

Free PHP script to track how many times a given link has been clicked.

Either edit `data.txt` or use `add.php` to configure which links to track. The first item is the link's ID, followed by the URL and the initial counter with a value of `0` (zero). The rest of the script's files should be good to go. You'll need to change your existing link(s) before you can count any clicks.

**Example**

A line in `data.txt` containing `exam|http://www.example,com|0` would track how many times your users click on a link to `www.example.com` using `exam` as the link's ID. Assuming the script is located in `/cac/`, you would change the existing link from `a href=http://www.example.com` to `a href=/cac?id=exam`. That's all there is to it. Happy click and counting. Point your browser to `stats.php` to view a summary.

[Script homepage](http://phclaus.eu.org/php-scripts/click-and-count/)
