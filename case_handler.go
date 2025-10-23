package handlers

import (
    "net/http"
    "github.com/gin-gonic/gin"
    "digital-forensic-platform/models"
)

func GetCases(c *gin.Context) {
    // Logika untuk mengambil data kasus dari database atau cache
    cases := []models.Case{{ID: 1, Title: "Sample Case Update"}}
    c.JSON(http.StatusOK, cases)
}
