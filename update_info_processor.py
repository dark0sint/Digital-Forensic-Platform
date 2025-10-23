import requests

def process_updates(updates):
    for update in updates:
        response = requests.post('http://localhost:8080/api/cases', json=update)
        print(f"Processed: {response.json()}")

if __name__ == "__main__":
    updates = [{"title": "Sample Update", "description": "Details"}]
    process_updates(updates)
