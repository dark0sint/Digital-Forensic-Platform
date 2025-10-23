package models

type Roadmap struct {
    ID     int      `json:"id"`
    CaseID int      `json:"case_id"`
    Steps  []string `json:"steps"`
}
