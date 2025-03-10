import requests

def send_sms():
    url = "https://sms.webline.africa/api/v3/sms/send"
    headers = {
        "Authorization": "Bearer YOUR_API_TOKEN"
    }
    
    params = {
        "recipient": "+255734666100",
        "sender_id": "Webline",
        "message": "Your Python SMS message here"
    }
    
    try:
        response = requests.post(url, headers=headers, params=params)
        response.raise_for_status()
        print("SMS sent successfully!")
        print(response.json())
    except requests.exceptions.RequestException as e:
        print(f"Failed to send SMS: {e}")

if __name__ == "__main__":
    send_sms()
