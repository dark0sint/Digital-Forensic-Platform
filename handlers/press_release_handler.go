package handlers

import (
    "digital-forensic-platform/models"
    "github.com/gin-gonic/gin"
    "net/http"
)

var pressReleases []models.PressRelease

func CreatePressRelease(c *gin.Context) {
    var newPressRelease models.PressRelease
    if err := c.ShouldBindJSON(&newPressRelease); err != nil {
        c.JSON(http.StatusBadRequest, gin.H{"error": err.Error()})
        return
    }
    pressReleases = append(pressReleases, newPressRelease)
    c.JSON(http.StatusCreated, newPressRelease)
}
