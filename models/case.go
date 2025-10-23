package models

type Case struct {
    ID          int    `json:"id"`
    Title       string `json:"title"`
    Description string `json:"description"`
}
