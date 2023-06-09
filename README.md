# CSV Data Validation and Storage System

## Description
The CSV Data Validation and Storage System is a web application built using the Laravel framework. It allows users to upload a CSV file containing user data, validate the data based on specified conditions, store the valid data in a database, and provide a summary report of the uploaded data. Users can also view and filter the list of stored users.

## Technologies Used
- Laravel
- Bootstrap
- MySQL

## Installation Instructions
1. Clone the repository to your local machine.
2. Navigate to the project directory.
3. Run the following command to install the PHP dependencies:
   ```
   composer install
   ```
4. Run the following command to install the JavaScript dependencies:
   ```
   npm install
   ```
5. Create a new MySQL database for the project.
6. Rename the `.env.example` file to `.env` and update the database connection details.
7. Generate the application key by running the following command:
   ```
   php artisan key:generate
   ```
8. Run the database migrations to create the necessary tables:
   ```
   php artisan migrate
   ```
9. Build the assets by running the following command:
   ```
   npm run dev
   ```
10. Start the development server:
   ```
   php artisan serve
   ```
11. Access the application by visiting `http://localhost:8000` in your browser.

## Usage
1. Upload CSV File:
   - Visit the homepage of the application.
   - Click on the "Choose File" button to select a CSV file.
   - Click the "Upload" button to process the file.
   - The system will validate the data and provide a summary report.

2. View User List:
   - Click on the "User List" link in the navigation menu.
   - Use the filter form to search for users based on name, email, phone number, and gender.

## Screenshots
![Upload CSV](screenshots/upload.png)
*Screenshot 1: Uploading a CSV file.*

![Summary Report](screenshots/summary.png)
*Screenshot 2: Summary report of the uploaded data.*

![User List](screenshots/userlist.png)
*Screenshot 3: List of stored users with filtering options.*

![Upload another CSV](screenshots/another_upload.png)
*Screenshot 4: Uploading another CSV file.*

![Another Summary Report](screenshots/summary_another.png)
*Screenshot 5: Summary report of the another uploaded data.*

![User List After Another Upload](screenshots/userlist_after_another_upload.png)
*Screenshot 6: List of stored users with filtering options after another upload.*

## Features
- File upload functionality with CSV validation.
- Storage of validated user data in a database.
- Summary report showing total data, successful uploads, duplicates, invalid records, and incomplete records.
- Filtering of user list based on name, email, phone number, and gender.

## File Descriptions and Locations

1. **app\Http\Controllers\UserController.php:**
   - Location: `app\Http\Controllers\UserController.php`
   - Description: This file is located in the `app\Http\Controllers` directory and contains the `UserController` class. It serves as the controller for user-related actions in the application, handling tasks such as file upload, data validation, and displaying views.

2. **app\Models\User.php:**
   - Location: `app\Models\User.php`
   - Description: This file is located in the `app\Models` directory and contains the `User` model class. It represents the `User` entity in the application and defines the structure and behavior of the `users` table in the database.

3. **routes\web.php:**
   - Location: `routes\web.php`
   - Description: This file is located in the `routes` directory and contains the web routes for the application. It defines the URL mappings and corresponding controller methods for handling user requests and interactions.

4. **resources\views\layouts\app.blade.php:**
   - Location: `resources\views\layouts\app.blade.php`
   - Description: This file is located in the `resources\views\layouts` directory and serves as the layout template for the application's views. It provides the common HTML structure, including the navigation bar, and allows dynamic content to be inserted using the Blade templating engine.

5. **resources\views\upload.blade.php:**
   - Location: `resources\views\upload.blade.php`
   - Description: This file is located in the `resources\views` directory and represents the view for uploading CSV files. It includes a form to upload a file and is rendered within the app layout.

6. **resources\views\summary.blade.php:**
   - Location: `resources\views\summary.blade.php`
   - Description: This file is located in the `resources\views` directory and represents the view for displaying the summary report after uploading a CSV file. It shows statistics and detailed tables for invalid and duplicate records.

7. **resources\views\list.blade.php:**
   - Location: `resources\views\list.blade.php`
   - Description: This file is located in the `resources\views` directory and represents the view for displaying the user list. It includes a filter form and displays the filtered user records in a table.

8. **database\migrations\2023_06_08_141350_create_users_table.php:**
   - Location: `database\migrations\2023_06_08_141350_create_users_table.php`
   - Description: This file is located in the `database\migrations` directory and contains the migration file for creating the `users` table in the database. It defines the table structure and is responsible for setting up the necessary database schema.
   
## Known Issues
- None at the moment.

## Future Enhancements
- Add pagination to the user list for better performance with a large number of records.
- Implement user authentication and access control for secure data management.
- Provide options for exporting user data in various formats (e.g., CSV, Excel).

## License
This project is licensed under the [MIT License](LICENSE).

## Contact Information
For any inquiries or support, please email [mahidul5130@gmail.com](mailto:mahidul5130@gmail.com).
