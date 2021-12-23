# DonovanTV
DonovanTV is a free TV client for devices that can host PHP. Watch from a series of channels live on your computer.
## Note!
- If you are hosting DonovanTV on a website or web server, simply replace `localhost` in this guide with your URL. If your server has SSL, replace `http://` in this guide with `https://`.
- Getting errors in your console? It's because you or someone visiting your instance (no one but you can visit a `localhost` instance) did not select a channel to watch. This is a false-positive and everything is running smoothly. To prevent seeing these errors, in your `php.ini` file, change `display_errors` to `Off`.
## Setup
### Web Server
#### Run Online with a Hosting Provider or Web Server
Upload the `index.php`, `updater.php` and `config.php` to your host. Change the `config.php` as needed.
### Windows
#### Run Locally with XAMPP
First, you need to download and install XAMPP. This is needed for you to access DonovanTV. You can [download this here](https://www.apachefriends.org/xampp-files/8.0.13/xampp-windows-x64-8.0.13-0-VS16-installer.exe).
1. Once you install XAMPP, download this repository as a ZIP. Extract it to your desktop and open the folder. Move the `index.php`, `updater.php` and `config.php` to `C:\xampp\htdocs`.
2. Open XAMPP. Next to `Apache`, click the `Start` button.
3. [Click here](http://localhost/index.php) or visit `http://localhost/index.php` in your web browser.
4. Change the `config.php` as you need
5. Select a channel from the dropdown and click **Change Channel** to start watching!
### Android
#### AWebServer
⚠️ **SECURITY WARNING!** Anyone with your IP address can access your instance of DonovanTV. Do not share your IP with anyone--if you do, you are more vulnerable to get DDoS'd!

1. [Download AWebServer](https://play.google.com/store/apps/details?id=com.sylkat.apache) from the Google Play Store.
2. Open the app and let the files extract.
3. Once the files are extracted, close AWebServer and plug your phone into a computer.
4. On your computer, download this repository as a ZIP. Extract it to your desktop and open the folder. Move the `index.php`, `updater.php` and `config.php` to your phone at  `/data/user/0/com.sylkat.apache/files/usr/share/apache2/default-site/htdocs`.
5. Disconnect your phone from your computer and open AWebServer.
6. In AWebServer next to Port, tap `Set`.
7. Type `80`, then tap `Ok`.
8. Next to Service, tap `Start`.
9. Leave AWebServerOpen but go to your phone's homescreen and open Google Chrome.
10. Google `What is my IP Address?`. The response should be 4 numbers seperated by dots, copy this.
11. In the URL bar, type `http://` then paste the numbers you copied. Tap `Go`.
## Thanks
### Code and Software
- [hls.js](https://www.npmjs.com/package/hls.js) (used to display the live feed)
- [JSDelivr](https://www.jsdelivr.com/) (used to fetch hls.js and contents from the [API](https://github.com/therealdonovan/DonovanTVAPI) without needing to download anything)
- [iptv-restream/iptv-channels](https://github.com/iptv-restream/iptv-channels), [i.mjh.nz](https://i.mjh.nz/) and numerous other publicly-accessible sources (used to find m3u8 stream links for the [API](https://github.com/therealdonovan/DonovanTVAPI))
