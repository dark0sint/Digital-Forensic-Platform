package main

import (
    "digital-forensic-platform/handlers"
    "github.com/gin-gonic/gin"
)

func main() {
    r := gin.Default()
    r.GET("/api/cases", handlers.GetCases)
    r.POST("/api/cases", handlers.CreateCase)
    r.POST("/api/roadmaps", handlers.CreateRoadmap)
    r.POST("/api/press-releases", handlers.CreatePressRelease)
    r.Run(":8080")
}
