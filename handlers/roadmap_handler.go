package handlers

import (
    "digital-forensic-platform/models"
    "github.com/gin-gonic/gin"
    "net/http"
)

var roadmaps []models.Roadmap

func CreateRoadmap(c *gin.Context) {
    var newRoadmap models.Roadmap
    if err := c.ShouldBindJSON(&newRoadmap); err != nil {
        c.JSON(http.StatusBadRequest, gin.H{"error": err.Error()})
        return
    }
    roadmaps = append(roadmaps, newRoadmap)
    c.JSON(http.StatusCreated, newRoadmap)
}
