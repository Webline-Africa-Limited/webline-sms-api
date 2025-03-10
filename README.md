# Webline SMS API PHP Client

This PHP script allows you to send SMS messages through the Webline SMS API.

## Requirements
- PHP with cURL extension
- Webline API Bearer Token (get from https://sms.webline.africa/developers)

## Configuration
Edit the following variables in `php_example.php`:
- `$senderid`: Your registered sender ID (e.g., "Webline")
- `$phone`: Recipient phone number in international format (e.g., "255753716279")
- `$message`: SMS message content
- `$api_username`: Your Webline API Bearer Token

## Usage
1. Set the required variables in `index.php`
2. Run the script:
```bash
php php_example.php
```

## API Endpoint
The script uses the Webline SMS API v3 endpoint:
```
POST https://sms.webline.africa/api/v3/sms/send
```

## Response Handling
The API response will be printed to stdout. Successful responses will include a message ID, while errors will return an error message.

## Example
```php
$senderid = 'Webline';
$phone = '+255734666100';
$message = 'Hogera Utajibiwa kupitia mawasilian';
$api_username = 'your_bearer_token_here';
```

## Error Handling
- Check the response for success/error messages
- Ensure your API token is valid
- Verify phone number format
- Check your internet connection

## Additional Examples

### Python Example
See [python_example.py](python_example.py) for a standalone Python implementation.

### Django Example
See [django_example.py](django_example.py) for a Django view implementation.

## Documentation
For more information, visit:
- [Webline SMS API Documentation](https://sms.webline.africa/developers)
- [Postman API Documentation](https://documenter.getpostman.com/view/16234601/2s93z9bNL1)
