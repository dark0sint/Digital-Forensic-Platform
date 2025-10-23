# Otomatisasi pembuatan roadmap dari data kasus
def generate_roadmap(case_data):
    roadmap = {
        "steps": ["Initial Analysis", "Evidence Collection", "Report Generation"],
        "case_id": case_data['id']
    }
    # Simpan atau kirim ke Laravel/Golang
    return roadmap
