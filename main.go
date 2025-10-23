package main

import (
    "github.com/gin-gonic/gin"
    "digital-forensic-platform/handlers"
)

func main() {
    r := gin.Default()
    r.GET("/api/cases", handlers.GetCases)  // Endpoint untuk update informasi
    r.POST("/api/roadmaps", handlers.CreateRoadmap)  // Endpoint untuk roadmap
    r.POST("/api/press-releases", handlers.CreatePressRelease)  // Endpoint untuk press release
    r.Run(":8080")  // Jalankan di port 8080
}
