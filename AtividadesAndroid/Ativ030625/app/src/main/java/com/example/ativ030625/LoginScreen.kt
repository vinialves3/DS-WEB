package com.example.ativ030625

import androidx.compose.foundation.layout.Arrangement
import androidx.compose.foundation.layout.Column
import androidx.compose.foundation.layout.fillMaxSize
import androidx.compose.foundation.layout.padding
import androidx.compose.material3.Button
import androidx.compose.material3.OutlinedTextField
import androidx.compose.material3.Surface
import androidx.compose.material3.Text
import androidx.compose.runtime.Composable
import androidx.compose.runtime.getValue
import androidx.compose.runtime.mutableStateOf
import androidx.compose.runtime.remember
import androidx.compose.runtime.setValue
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.text.font.FontWeight
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp
import androidx.navigation.NavController
import com.example.ativ030625.ui.theme.Ativ030625Theme






@Composable
fun LoginScreen(navController: NavController){
    Column {
        var nome by remember { mutableStateOf("") }
        var email by remember { mutableStateOf("") }
        var senha by remember { mutableStateOf("") }
        var login by remember { mutableStateOf("") }






        Ativ030625Theme {
            Surface(
                modifier = Modifier
                    .fillMaxSize()
                    .padding(10.dp)





            ) {
                Column(
                    verticalArrangement = Arrangement.Center,
                    horizontalAlignment = Alignment.CenterHorizontally
                ) {
                    Text(text = "Tela de Login", fontSize = 30.sp, fontWeight = FontWeight.Bold)






                    OutlinedTextField(
                        value = nome,
                        onValueChange = { nome = it.trim() },
                        label = { Text(text = "Nome", fontSize = 20.sp) },
                        maxLines = 1
                    )





                    OutlinedTextField(
                        value = email,
                        onValueChange = { email = it.trim() },
                        label = { Text(text = "Email", fontSize = 20.sp) },
                        maxLines = 1
                    )




                    OutlinedTextField(
                        value = senha,
                        onValueChange = { senha = it.trim() },
                        label = { Text(text = "Senha", fontSize = 20.sp) },
                        maxLines = 1
                    )
                    Button(onClick = { navController.navigate("home") }) {
                        Text("Acessar a home")
                    }

                }
            }
        }
    }
}
