# Cross-Site Scripting (XSS) Vulnerability Demonstrations

This repository contains simple PHP pages demonstrating different types of Cross-Site Scripting (XSS) vulnerabilities for educational purposes. XSS vulnerabilities occur when untrusted data is included in a web page without proper validation or escaping, allowing attackers to execute malicious scripts in the context of a user's browser.

## Disclaimer

**Important: Do not deploy this code in a production environment!** These pages contain security vulnerabilities that can be exploited by malicious actors. They are intended for educational purposes only to demonstrate the concept of XSS vulnerabilities and should be used responsibly.

## Vulnerability Types

1. **Reflected XSS**: Demonstrates how an attacker can inject malicious scripts that are reflected back to the user. This vulnerability often arises from unsanitized user input being directly echoed back in the response.

2. **Stored XSS**: Shows how an attacker can store malicious scripts in the application's database or filesystem, which are then displayed to other users without proper sanitization. This vulnerability can have long-lasting effects as the malicious script persists across multiple visits to the page.

## Usage with Nginx Web Server

1. Ensure you have Nginx and PHP-FPM (PHP FastCGI Process Manager) installed and configured on your system. If not, you can install it using your package manager or by following the official installation instructions.

2. Clone this repository to your server:

    ```bash
    git clone https://github.com/webserverdude/php-xss.git
    ```

3. Move the repository directory to your Nginx web root directory. For example:

    ```bash
    sudo mv xss-vulnerabilities /var/www/html/
    ```

4. Update your Nginx configuration to serve the index.html page. 

5. Restart Nginx to apply the changes.

6. Ensure that the `comments.txt` file exists in the root directory of the repository and has the correct permissions. You can create the file manually and set its permissions to `777` to allow read, write, and execute permissions for all users:

    ```bash
    touch /var/www/html/xss-vulnerabilities/comments.txt
    chmod 777 /var/www/html/xss-vulnerabilities/comments.txt
    ```

7. Now, you can access the XSS demonstration pages in your web browser. Visit the following URLs:

    - Index page (links to the other two pages): `http://localhost/index.html`
    - Reflected XSS: `http://localhost/reflected-xss.php`
    - Stored XSS: `http://localhost/stored-xss.php`

8. Experiment with different inputs to understand how XSS attacks work and their potential impact.

## Examples

To demonstrate the reflected XSS vulnerability, you can use the provided PHP page by appending a `name` parameter with a script tag. For example:

`http://localhost/reflected_xss.php?name=<script>alert('XSS');</script>`

You can use the same `<script>alert('XSS');</script>` as a comment in the `stored-xss.php` page.

Remember, exercise caution when running vulnerable code and avoid deploying it in a production environment.