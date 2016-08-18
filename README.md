# Click And Count

Free PHP script to track how many times a given link has been clicked.

The first entry is the link ID, followed by the URL and the initial counter with a value of `0` (zero). Open `admin.php?cac` to add new entries or edit existing ones. You should change the default query string before using the script.

A line in `data.txt` containing `exam|http://www.example,com|0` would track how many times your users click on a link to `www.example.com` using `exam` as the link ID. Assuming the script is located in `/cac/`, you would change the existing link from `a href=http://www.example.com` to `a href=/cac?id=exam`. That is all there is to it. Happy click and counting.

[Script homepage](http://phclaus.eu.org/php-scripts/click-and-count/)
