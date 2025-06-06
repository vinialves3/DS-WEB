package com.example.ativ030625

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.navigation.compose.NavHost
import androidx.navigation.compose.composable
import androidx.navigation.compose.rememberNavController
import com.example.ativ030625.ui.theme.Ativ030625Theme
import com.example.navigation.HomeScreen




class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            Ativ030625Theme {

                var navController = rememberNavController()

                NavHost(navController = navController, startDestination = "login") {
                    composable(route = "login") {
                        LoginScreen(navController)
                    }
                    composable(route= "home") {
                        HomeScreen(navController)
                    }
                }
            }
        }
    }
}