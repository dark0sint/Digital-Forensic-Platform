package handlers

import (
    "digital-forensic-platform/models"
    "github.com/gin-gonic/gin"
    "net/http"
)

var cases []models.Case

func GetCases(c *gin.Context) {
    c.JSON(http.StatusOK, cases)
}

func CreateCase(c *gin.Context) {
    var newCase models.Case
    if err := c.ShouldBindJSON(&newCase); err != nil {
        c.JSON(http.StatusBadRequest, gin.H{"error": err.Error()})
        return
    }
    cases = append(cases, newCase)
    c.JSON(http.StatusCreated, newCase)
}
