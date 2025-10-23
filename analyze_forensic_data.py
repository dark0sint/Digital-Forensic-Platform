import pandas as pd
import requests

# Parsing data forensik dari file log
def parse_log_file(file_path):
    data = pd.read_csv(file_path)
    updates = data[data['type'] == 'update']  # Filter update informasi
    return updates.to_dict('records')

# Kirim hasil ke API Golang
updates = parse_log_file('forensic_log.csv')
response = requests.post('http://localhost:8080/api/cases', json=updates)
print(response.json())
