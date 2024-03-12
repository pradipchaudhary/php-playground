# Superglobal Variables

In PHP, superglobal variables are special global variables that are always accessible, regardless of scope. They are called "superglobals" because they are available in all parts of a script, and they play a crucial role in PHP programming. The main superglobal variables in PHP are:

1. **[$GLOBALS](#$GLOBALS)**: Used to access global variables from anywhere in the script.

2. **[$\_SERVER](#$_SERVER)**: Contains information about the server and the execution environment.

3. **[$\_REQUEST]($_REQUEST)**: Collects data from both the $\_GET and $\_POST superglobal arrays, as well as from $\_COOKIE.

4. **[$\_POST](#$_POST)**: Holds data sent to the script via HTTP POST method.

5. **[$\_GET](#$_GET)**: Holds data sent to the script via HTTP GET method.

6. **[$\_FILES](#$_FILES)**: Contains information about file uploads via HTTP POST.

7. **[$\_ENV](#$_ENV)**: Holds information about the environment.

8. **[$\_COOKIE](#$_COOKIE)**: Contains data sent to the script via HTTP cookies.

9. **[$\_SESSION](#$_SESSION)**: Manages session variables.

Here's a brief explanation with a simple example:

```php
<?php
// Using $GLOBALS
$global_variable = 10;

function access_global_variable() {
    echo $GLOBALS['global_variable'] . "\n";
}

access_global_variable(); // Output: 10

// Using $_POST and $_GET
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    echo "Welcome, $username!";
} else {
    ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="username">Username:</label>
        <input type="text" name="username">
        <input type="submit" value="Submit">
    </form>
    <?php
}
?>
```

In this example:

-  `$GLOBALS` is used to access the global variable from within the function.
-  `$_POST` is used to retrieve data sent to the script via a POST request.
-  `$_GET` is used to retrieve data sent to the script via a GET request.

Superglobal variables are essential for various reasons, including data input, form handling, and managing session information. They provide a convenient and standardized way to access and manipulate data in different parts of your PHP script.

<br>

# Better Understanding.

## 1. [$GLOBALS:](#1-globals)

The `$GLOBALS` array holds references to all global variables, allowing you to access them from within functions or methods.

Example:

```php
<?php
$global_variable = 10;

function access_global_variable() {
    echo $GLOBALS['global_variable'] . "\n";
}

access_global_variable(); // Output: 10
?>
```

In this example, the function `access_global_variable` can access the `$global_variable` declared outside the function by using `$GLOBALS`.

### `$GLOBALS` Keys and Methods

---

The `$_SERVER` superglobal in PHP provides information about the server environment and the current request. It is an associative array containing various server-related details. Here are some commonly used keys within the `$_SERVER` array along with their descriptions:

1. **'PHP_SELF':**

   -  Description: Returns the filename of the currently executing script.
   -  Example:
      ```php
      $current_script = $_SERVER['PHP_SELF'];
      echo "Current script: $current_script";
      ```

2. **'SERVER_NAME':**

   -  Description: Returns the server's host name.
   -  Example:
      ```php
      $server_name = $_SERVER['SERVER_NAME'];
      echo "Server name: $server_name";
      ```

3. **'REQUEST_METHOD':**

   -  Description: Returns the request method used to access the page (e.g., 'GET', 'POST').
   -  Example:
      ```php
      $request_method = $_SERVER['REQUEST_METHOD'];
      echo "Request method: $request_method";
      ```

4. **'QUERY_STRING':**

   -  Description: Returns the query string portion of the URL.
   -  Example:
      ```php
      $query_string = $_SERVER['QUERY_STRING'];
      echo "Query string: $query_string";
      ```

5. **'HTTP_USER_AGENT':**

   -  Description: Returns the user-agent string of the browser.
   -  Example:
      ```php
      $user_agent = $_SERVER['HTTP_USER_AGENT'];
      echo "User Agent: $user_agent";
      ```

6. **'REMOTE_ADDR':**

   -  Description: Returns the IP address of the client making the request.
   -  Example:
      ```php
      $client_ip = $_SERVER['REMOTE_ADDR'];
      echo "Client IP: $client_ip";
      ```

7. **'SERVER_SOFTWARE':**
   -  Description: Returns the server software name and version.
   -  Example:
      ```php
      $server_software = $_SERVER['SERVER_SOFTWARE'];
      echo "Server software: $server_software";
      ```

These examples showcase some of the commonly used elements within the `$_SERVER` superglobal. You can access other elements based on your specific needs. It's important to note that the information provided by `$_SERVER` can be influenced or modified by the server configuration, so not all keys may be available in every environment. Always check the PHP documentation for the most accurate and up-to-date information: [PHP $\_SERVER Documentation](https://www.php.net/manual/en/reserved.variables.server.php).

### 2. [$\_SERVER:](#2-_server)

The `$_SERVER` superglobal provides information about the server and the current request.

Example:

```php
<?php
echo $_SERVER['PHP_SELF']; // Returns the filename of the currently executing script
echo $_SERVER['SERVER_NAME']; // Returns the server's host name
?>
```

You can use `$_SERVER` to obtain various details like script names, server names, request methods, and more.

### `$_SERVER` Keys and Methods

---

Here are some common keys and methods associated with the `$_SERVER` superglobal in PHP, along with code examples:

1. **'PHP_SELF':**

   -  Returns the filename of the currently executing script.

   ```php
   $current_script = $_SERVER['PHP_SELF'];
   echo "Current script: $current_script";
   ```

2. **'SERVER_NAME':**

   -  Returns the server's host name.

   ```php
   $server_name = $_SERVER['SERVER_NAME'];
   echo "Server name: $server_name";
   ```

3. **'REQUEST_METHOD':**

   -  Returns the request method used to access the page (e.g., 'GET', 'POST').

   ```php
   $request_method = $_SERVER['REQUEST_METHOD'];
   echo "Request method: $request_method";
   ```

4. **'QUERY_STRING':**

   -  Returns the query string portion of the URL.

   ```php
   $query_string = $_SERVER['QUERY_STRING'];
   echo "Query string: $query_string";
   ```

5. **'HTTP_USER_AGENT':**

   -  Returns the user-agent string of the browser.

   ```php
   $user_agent = $_SERVER['HTTP_USER_AGENT'];
   echo "User Agent: $user_agent";
   ```

6. **'REMOTE_ADDR':**

   -  Returns the IP address of the client making the request.

   ```php
   $client_ip = $_SERVER['REMOTE_ADDR'];
   echo "Client IP: $client_ip";
   ```

7. **'SERVER_SOFTWARE':**

   -  Returns the server software name and version.

   ```php
   $server_software = $_SERVER['SERVER_SOFTWARE'];
   echo "Server software: $server_software";
   ```

8. **'HTTP_REFERER':**

   -  Returns the URL of the page that referred the current page (if available).

   ```php
   $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : "Not available";
   echo "Referer: $referer";
   ```

9. **'SERVER_PORT':**

   -  Returns the server port being used for the request.

   ```php
   $server_port = $_SERVER['SERVER_PORT'];
   echo "Server port: $server_port";
   ```

10.   **'SCRIPT_FILENAME':**

      -  Returns the absolute pathname of the currently executing script.

      ```php
      $script_filename = $_SERVER['SCRIPT_FILENAME'];
      echo "Script filename: $script_filename";
      ```

11.   **'HTTPS':**
      -  Indicates whether the request is secure (HTTPS) or not.
      ```php
      $is_secure = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on';
      echo "Is secure connection: " . ($is_secure ? 'Yes' : 'No');
      ```

These examples demonstrate how to use various keys within the `$_SERVER` superglobal to obtain information about the server environment and the current request in a PHP script.

## 3. [$\_REQUEST:](#3-_request)

`$_REQUEST` is a combined array that includes data from `$_GET`, `$_POST`, and `$_COOKIE`. It is used to collect data from HTML forms.

Example:

```php
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_REQUEST['username'];
    echo "Welcome, $username!";
} else {
    ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="username">Username:</label>
        <input type="text" name="username">
        <input type="submit" value="Submit">
    </form>
    <?php
}
?>
```

Here, the script checks if the request method is POST, and if so, it retrieves the username from `$_REQUEST`. The form sends data to the same script using the POST method.

### `$_REQUEST` Keys and Methods

---

The `$_REQUEST` superglobal in PHP is an associative array that contains data from the `$_GET`, `$_POST`, and `$_COOKIE` superglobals. It is commonly used to collect form data submitted via both GET and POST methods, as well as data stored in cookies. Here are some commonly used keys and methods associated with the `$_REQUEST` superglobal:

1. **Accessing Form Data:**

   -  You can access form data submitted via both GET and POST methods using keys corresponding to the form field names.

   ```php
   $username = $_REQUEST['username'];
   ```

2. **Using with HTML Forms:**

   -  Example HTML form using the POST method:

   ```html
   <form method="post" action="process_form.php">
      <input type="text" name="username" />
      <input type="submit" value="Submit" />
   </form>
   ```

   -  In the PHP script (`process_form.php`), you can use `$_REQUEST` to access the submitted data.

3. **Handling Cookies:**

   -  `$_REQUEST` includes data from cookies. You can access it using the cookie name as the key.

   ```php
   $user_cookie = $_REQUEST['user_cookie'];
   ```

4. **Check if a Key Exists:**

   -  You can use `isset` to check if a specific key exists in the `$_REQUEST` array.

   ```php
   if (isset($_REQUEST['username'])) {
       // Key 'username' exists
   }
   ```

5. **Handling File Uploads:**

   -  `$_REQUEST` can be used in conjunction with file uploads (though it's more common to use `$_FILES` for this purpose).

   ```php
   $uploaded_file = $_REQUEST['file_upload'];
   ```

6. **Using Array Syntax:**

   -  Since `$_REQUEST` is an associative array, you can use array syntax for accessing elements.

   ```php
   $value = $_REQUEST['key'];
   ```

7. **Empty Check:**
   -  You can use `empty` to check if a key exists and has a non-empty value.
   ```php
   if (!empty($_REQUEST['username'])) {
       // 'username' is set and not empty
   }
   ```

Remember that relying too heavily on `$_REQUEST` might lead to security concerns, as it combines data from multiple sources. It's generally a good practice to use `$_GET` or `$_POST` directly based on the form's submission method, unless there's a specific need to handle both methods using `$_REQUEST`.

## 4. [$\_POST:](#4-_post)

`$_POST` is used to collect form data using the HTTP POST method.

Example:

```php
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    echo "Welcome, $username!";
}
?>
```

In this example, the script checks if the request method is POST and then retrieves the username from `$_POST`.

### `$_POST` Keys and Methods

---

The `$_POST` superglobal in PHP is used to collect form data that is submitted with the HTTP POST method. Here are some common keys and methods associated with `$_POST` along with code examples:

1. **Accessing Form Data:**

   -  You can access form data submitted via the POST method using keys corresponding to the form field names.

   ```php
   $username = $_POST['username'];
   ```

2. **Using with HTML Forms:**

   -  Example HTML form using the POST method:

   ```html
   <form method="post" action="process_form.php">
      <input type="text" name="username" />
      <input type="submit" value="Submit" />
   </form>
   ```

   -  In the PHP script (`process_form.php`), you can use `$_POST` to access the submitted data.

3. **Array Syntax:**

   -  Since `$_POST` is an associative array, you can use array syntax for accessing elements.

   ```php
   $password = $_POST['password'];
   ```

4. **Empty Check:**

   -  You can use `empty` to check if a key exists and has a non-empty value.

   ```php
   if (!empty($_POST['username'])) {
       // 'username' is set and not empty
   }
   ```

5. **Check if a Key Exists:**

   -  You can use `isset` to check if a specific key exists in the `$_POST` array.

   ```php
   if (isset($_POST['password'])) {
       // Key 'password' exists
   }
   ```

6. **Multiple Values with the Same Name:**

   -  If a form field has multiple values with the same name, `$_POST` will create an array for that key.

   ```php
   $colors = $_POST['colors']; // If 'colors' is an array in the form
   ```

7. **Using Filter Functions:**

   -  You can use filter functions for validation and sanitation.

   ```php
   $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
   if ($email !== false) {
       // Valid email address
   }
   ```

8. **Counting Submitted Elements:**
   -  You can use `count` to determine how many elements were submitted.
   ```php
   $num_elements = count($_POST);
   ```

Remember to validate and sanitize user input, especially when dealing with form submissions, to enhance security and prevent vulnerabilities such as SQL injection and cross-site scripting (XSS).

## 5. [$\_GET:](#5-_get)

`$_GET` is used to collect form data using the HTTP GET method, typically from URLs.

Example:

```php
<?php
$parameter = $_GET['parameter'];
echo "Value of parameter: $parameter";
?>
```

In this example, the script retrieves a parameter from the URL using `$_GET`.

### `$_GET` Keys and Methods

---

The `$_GET` superglobal in PHP is used to collect form data that is submitted with the HTTP GET method. It's often used to pass data between pages through the URL. Here are some common keys and methods associated with `$_GET` along with code examples:

1. **Accessing Query Parameters:**

   -  You can access query parameters (data in the URL) using keys corresponding to the parameter names.

   ```php
   $username = $_GET['username'];
   ```

2. **Using with HTML Forms:**

   -  Example HTML form using the GET method:

   ```html
   <form method="get" action="process_form.php">
      <input type="text" name="username" />
      <input type="submit" value="Submit" />
   </form>
   ```

   -  In the PHP script (`process_form.php`), you can use `$_GET` to access the submitted data.

3. **Array Syntax:**

   -  Since `$_GET` is an associative array, you can use array syntax for accessing elements.

   ```php
   $category = $_GET['category'];
   ```

4. **Empty Check:**

   -  You can use `empty` to check if a key exists and has a non-empty value.

   ```php
   if (!empty($_GET['username'])) {
       // 'username' is set and not empty
   }
   ```

5. **Check if a Key Exists:**

   -  You can use `isset` to check if a specific key exists in the `$_GET` array.

   ```php
   if (isset($_GET['category'])) {
       // Key 'category' exists
   }
   ```

6. **Multiple Values with the Same Name:**

   -  If a query parameter has multiple values with the same name, `$_GET` will create an array for that key.

   ```php
   $colors = $_GET['colors']; // If 'colors' is an array in the URL
   ```

7. **Using Filter Functions:**

   -  You can use filter functions for validation and sanitation.

   ```php
   $email = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL);
   if ($email !== false) {
       // Valid email address
   }
   ```

8. **Counting Submitted Elements:**
   -  You can use `count` to determine how many elements were submitted.
   ```php
   $num_elements = count($_GET);
   ```

Remember to validate and sanitize user input, especially when dealing with form submissions, to enhance security and prevent vulnerabilities such as SQL injection and cross-site scripting (XSS). Additionally, be cautious about exposing sensitive information through URL parameters, as they are visible in the browser's address bar.

## 6. [$\_FILES:](#6-_files)

`$_FILES` is used to handle file uploads via HTML forms with the `enctype="multipart/form-data"` attribute.

Example:

```php
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $uploadedFile = $_FILES['file_upload'];
    // Process and handle the uploaded file here
}
?>
```

This example shows the basic usage of `$_FILES` to handle file uploads.

### `$_FILES` Keys and Methods

---

The `$_FILES` superglobal in PHP is used to handle file uploads that are submitted through HTML forms with the attribute `enctype="multipart/form-data"`. It contains information about uploaded files, such as file name, file type, and temporary location on the server. Here are some common keys and methods associated with `$_FILES` along with code examples:

1. **Accessing Uploaded File Information:**

   -  You can access information about an uploaded file using keys corresponding to the form field name.

   ```php
   $file_name = $_FILES['file_upload']['name'];
   $file_type = $_FILES['file_upload']['type'];
   $file_size = $_FILES['file_upload']['size'];
   $file_tmp = $_FILES['file_upload']['tmp_name'];
   $file_error = $_FILES['file_upload']['error'];
   ```

2. **Moving Uploaded File:**

   -  Use `move_uploaded_file` to move the uploaded file from the temporary location to a desired location on the server.

   ```php
   $upload_directory = 'uploads/';
   $target_path = $upload_directory . basename($_FILES['file_upload']['name']);

   if (move_uploaded_file($_FILES['file_upload']['tmp_name'], $target_path)) {
       echo "File uploaded successfully!";
   } else {
       echo "Error uploading file.";
   }
   ```

3. **Checking for Upload Errors:**

   -  Check the 'error' key to determine if there were any errors during the file upload.

   ```php
   if ($_FILES['file_upload']['error'] === UPLOAD_ERR_OK) {
       // File upload was successful
   } else {
       // Handle upload error
   }
   ```

4. **Validating File Type:**

   -  Use `pathinfo` and `in_array` to validate the file type.

   ```php
   $allowed_extensions = array('jpg', 'jpeg', 'png');
   $file_extension = pathinfo($_FILES['file_upload']['name'], PATHINFO_EXTENSION);

   if (in_array($file_extension, $allowed_extensions)) {
       // File type is allowed
   } else {
       // Invalid file type
   }
   ```

5. **Limiting File Size:**
   -  Check the 'size' key to limit the file size.
   ```php
   $max_file_size = 5 * 1024 * 1024; // 5 MB
   if ($_FILES['file_upload']['size'] <= $max_file_size) {
       // File size is within limit
   } else {
       // File size exceeds limit
   }
   ```

These examples demonstrate how to use various keys within the `$_FILES` superglobal to handle file uploads in PHP. Remember to set the appropriate permissions for the upload directory and validate user input to prevent security vulnerabilities.

## 7. [$\_ENV:](#7-_env)

`$_ENV` contains information about the environment, typically derived from the server's configuration.

Example:

```php
<?php
echo $_ENV['SERVER_SOFTWARE']; // Returns the server software name and version
?>
```

`$_ENV` allows you to access environment variables like server software information.

### `$_ENV` Keys and Methods

---

The `$_ENV` superglobal in PHP provides access to environment variables, which are typically set by the server or the system. Environment variables store information about the server environment, and `$_ENV` allows you to access and use this information within your PHP scripts. Here are some common keys and methods associated with `$_ENV` along with code examples:

1. **Accessing Environment Variables:**

   -  You can access environment variables using keys corresponding to the variable names.

   ```php
   $server_software = $_ENV['SERVER_SOFTWARE'];
   $document_root = $_ENV['DOCUMENT_ROOT'];
   ```

2. **Checking if a Key Exists:**

   -  Use `isset` to check if a specific environment variable exists.

   ```php
   if (isset($_ENV['DB_HOST'])) {
       // 'DB_HOST' environment variable exists
   }
   ```

3. **Displaying All Environment Variables:**

   -  You can use `print_r` or `var_dump` to display all environment variables.

   ```php
   print_r($_ENV);
   ```

4. **Setting Environment Variables:**

   -  Environment variables can be set within your server configuration or through PHP code (in certain cases).

   ```php
   putenv("CUSTOM_VARIABLE=example_value");
   ```

   **Note:** The ability to set environment variables within PHP code may depend on server configuration and security settings.

5. **Using Filter Functions:**

   -  You can use filter functions for validation and sanitation of environment variables.

   ```php
   $db_host = filter_var($_ENV['DB_HOST'], FILTER_VALIDATE_IP);
   if ($db_host !== false) {
       // Valid IP address
   }
   ```

6. **Getting Current Working Directory:**

   -  Use `getcwd()` to get the current working directory.

   ```php
   $current_directory = getcwd();
   echo "Current working directory: $current_directory";
   ```

7. **PHP Version Information:**
   -  You can access information about the PHP version being used.
   ```php
   $php_version = $_ENV['PHP_VERSION'];
   echo "PHP Version: $php_version";
   ```

These examples demonstrate how to use `$_ENV` to access and manipulate environment variables in PHP. Keep in mind that not all environment variables may be accessible or meaningful in all server environments. It's essential to consult your server documentation and settings to understand which environment variables are available.

### 8. [$\_COOKIE:](#8-_cookie)

`$_COOKIE` holds data sent to the script via HTTP cookies.

Example:

```php
<?php
if (isset($_COOKIE['user'])) {
    echo "Welcome back, " . $_COOKIE['user'] . "!";
}
?>
```

Here, the script checks if a cookie named 'user' is set and, if so, outputs a welcome message.

### `$_COOKIE` Keys and Methods

---

The `$_COOKIE` superglobal in PHP is used to access data sent to the server as HTTP cookies. Cookies are small pieces of data stored on the user's computer and sent with every request to the server. Here are some common keys and methods associated with `$_COOKIE` along with code examples:

1. **Accessing Cookie Data:**

   -  You can access cookie data using keys corresponding to the cookie names.

   ```php
   $user_cookie = $_COOKIE['user'];
   ```

2. **Checking if a Key Exists:**

   -  Use `isset` to check if a specific cookie exists.

   ```php
   if (isset($_COOKIE['user'])) {
       // 'user' cookie exists
   }
   ```

3. **Displaying All Cookies:**

   -  You can use `print_r` or `var_dump` to display all cookies.

   ```php
   print_r($_COOKIE);
   ```

4. **Setting Cookies:**

   -  Use the `setcookie` function to set a cookie. Cookies must be set before any output is sent to the browser.

   ```php
   $cookie_name = "user";
   $cookie_value = "JohnDoe";
   setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 seconds = 1 day
   ```

   -  The `setcookie` function parameters are:
      -  `$name`: The name of the cookie.
      -  `$value`: The value of the cookie.
      -  `$expire`: The expiration time (in seconds since the Unix Epoch).
      -  `$path`: The path on the server in which the cookie will be available.

5. **Deleting Cookies:**

   -  To delete a cookie, set its expiration time to a time in the past.

   ```php
   setcookie("user", "", time() - 3600, "/");
   ```

6. **Using Filter Functions:**

   -  You can use filter functions for validation and sanitation of cookie values.

   ```php
   $username = filter_var($_COOKIE['user'], FILTER_SANITIZE_STRING);
   ```

7. **Secure and HttpOnly Flags:**
   -  You can add flags to enhance cookie security. The `secure` flag ensures the cookie is only sent over HTTPS, and the `HttpOnly` flag restricts access to the cookie via JavaScript.
   ```php
   setcookie("user", "JohnDoe", time() + (86400 * 30), "/", "", true, true);
   ```

These examples demonstrate how to use `$_COOKIE` to access, set, and delete cookies in PHP. Always be cautious with the data stored in cookies and consider security implications, especially when dealing with sensitive information.

## 9. [$\_SESSION:](#9-_session)

`$_SESSION` is used to manage session variables for a user.

Example:

```php
<?php
session_start(); // Start the session

$_SESSION['username'] = 'JohnDoe'; // Set a session variable

echo "Welcome, " . $_SESSION['username'];
?>
```

In this example, a session is started, and a username is stored in the `$_SESSION` superglobal for later use.

Superglobal variables are essential in PHP as they facilitate data communication between different parts of a script, handle user input, and maintain session information. They provide a standardized and convenient way to access data across various scopes within a PHP script.

### `$_SESSION` Keys and Methods

---

The `$_SESSION` superglobal in PHP is used to store and retrieve session variables. Session variables are used to persist data across multiple pages during a user's visit to a website. Here are some common keys and methods associated with `$_SESSION` along with code examples:

1. **Starting a Session:**

   -  You need to start a session before using `$_SESSION`. This is typically done at the beginning of your PHP script.

   ```php
   session_start();
   ```

2. **Setting Session Variables:**

   -  You can set session variables by assigning values to `$_SESSION` keys.

   ```php
   $_SESSION['user_id'] = 123;
   $_SESSION['username'] = 'JohnDoe';
   ```

3. **Accessing Session Variables:**

   -  You can access session variables using keys corresponding to the variable names.

   ```php
   $user_id = $_SESSION['user_id'];
   $username = $_SESSION['username'];
   ```

4. **Checking if a Key Exists:**

   -  Use `isset` to check if a specific session variable exists.

   ```php
   if (isset($_SESSION['user_id'])) {
       // 'user_id' session variable exists
   }
   ```

5. **Displaying All Session Variables:**

   -  You can use `print_r` or `var_dump` to display all session variables.

   ```php
   print_r($_SESSION);
   ```

6. **Destroying a Session:**

   -  To end a session and clear all session data, use `session_destroy()`.

   ```php
   session_destroy();
   ```

7. **Regenerating Session ID:**

   -  For security reasons, you can regenerate the session ID to help prevent session fixation attacks.

   ```php
   session_regenerate_id();
   ```

8. **Using Filter Functions:**

   -  You can use filter functions for validation and sanitation of session variable values.

   ```php
   $username = filter_var($_SESSION['username'], FILTER_SANITIZE_STRING);
   ```

9. **Unsetting a Session Variable:**

   -  To remove a specific session variable, use `unset`.

   ```php
   unset($_SESSION['user_id']);
   ```

10.   **Custom Session Configuration:**
      -  You can customize session settings using `session_set_cookie_params()` and `session_name()`.
      ```php
      session_set_cookie_params(3600, '/', '.example.com', true, true);
      session_name('MySessionName');
      session_start();
      ```

These examples demonstrate how to use `$_SESSION` to manage session variables in PHP. It's essential to start the session before accessing or setting session variables and to properly handle session-related tasks for security and efficiency.

## Why superglobal are always arrays?

Superglobal variables in PHP are arrays because they are designed to hold and manage various types of data that are crucial for the execution and functionality of a PHP script. Using arrays allows PHP to organize this information in a structured manner, making it easy to access, manipulate, and iterate through the data.

### Here are a few reasons why superglobal variables are implemented as arrays:

1. **Data Organization:** Superglobals deal with different types of information, such as form input, server details, session data, and more. Using arrays helps organize this diverse set of data in a clear and systematic way.

2. **Consistency:** Representing superglobals as arrays provides a consistent and standardized interface for developers. Regardless of the specific superglobal, developers interact with them using array syntax, making the code more predictable and easier to understand.

3. **Flexibility:** Arrays allow for the storage of multiple values under distinct keys. This flexibility is essential because superglobals often contain various elements, such as query parameters, form fields, or cookie values.

4. **Compatibility:** The array structure is versatile and aligns with the nature of data that superglobals handle. It accommodates both associative and indexed array styles, making it adaptable to different scenarios.

5. **Backward Compatibility:** The use of arrays for superglobals is part of PHP's backward compatibility. Older scripts written before the introduction of superglobals might have used arrays directly, and the transition to superglobals as arrays allowed for a smoother upgrade path.

Let's take an example using the `$_GET` superglobal:

```php
<?php
// Using $_GET as an array
$parameter_value = $_GET['parameter'];

// Iterating through $_GET array
foreach ($_GET as $key => $value) {
    echo "$key: $value\n";
}
?>
```

In this example, `$_GET` is treated as an associative array, making it easy to access specific parameters or iterate through all parameters.

In summary, representing superglobal variables as arrays in PHP enhances the organization, consistency, flexibility, compatibility, and backward compatibility of the language, making it more user-friendly and developer-friendly.
