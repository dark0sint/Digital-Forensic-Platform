import requests

def generate_press_release(title, content):
    data = {"title": title, "content": content}
    response = requests.post('http://localhost:8080/api/press-releases', json=data)
    print(response.json())

if __name__ == "__main__":
    generate_press_release("New Forensic Findings", "Details here.")
