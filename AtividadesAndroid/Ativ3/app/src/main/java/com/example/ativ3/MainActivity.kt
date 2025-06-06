package com.example.ativ3

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.foundation.background
import androidx.compose.foundation.layout.*
import androidx.compose.material3.Button
import androidx.compose.material3.Text
import androidx.compose.runtime.*
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.unit.dp

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            MyApp()
        }
    }
}







@Composable
fun MyApp() {
    var pontosA by remember { mutableStateOf(0) }
    var pontosB by remember { mutableStateOf(0) }




    Column(
        modifier = Modifier
            .fillMaxSize()
            .background(Color.Black),
        horizontalAlignment = Alignment.CenterHorizontally,
        verticalArrangement = Arrangement.Center




    ) {
        // lembrar do ++
        Text(text = "Time A", color = Color.White )
        Text(text = pontosA.toString(), color = Color.White)
        Spacer(modifier = Modifier.height(10.dp))
        Button(onClick = { pontosA++ }) {
            Text(text = "Adicionar", color = Color.Black)  // ok
        }






        Spacer(modifier = Modifier.height(60.dp))






        // ok tb
        Text(text = "Time B", color = Color.White)
        Text(text = pontosB.toString(), color = Color.White)
        Spacer(modifier = Modifier.height(10.dp))
        Button(onClick = { pontosB++ }) {
            Text(text = "Adicionar", color = Color.Black)  // erro maiuscula
        }
    }
}
