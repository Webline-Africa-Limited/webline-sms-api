from django.http import JsonResponse
import requests

def send_sms(request):
    url = "https://sms.webline.africa/api/v3/sms/send"
    headers = {
        "Authorization": "Bearer YOUR_API_TOKEN"
    }
    
    params = {
        "recipient": "+255734666100",
        "sender_id": "Webline",
        "message": "Your Django SMS message here"
    }
    
    try:
        response = requests.post(url, headers=headers, params=params)
        response.raise_for_status()
        return JsonResponse(response.json())
    except requests.exceptions.RequestException as e:
        return JsonResponse({"error": str(e)}, status=500)
