package com.example.navigation

import androidx.compose.foundation.background
import androidx.compose.foundation.layout.Arrangement
import androidx.compose.foundation.layout.Column
import androidx.compose.foundation.layout.Row
import androidx.compose.foundation.layout.Spacer
import androidx.compose.foundation.layout.fillMaxSize
import androidx.compose.foundation.layout.fillMaxWidth
import androidx.compose.foundation.layout.height
import androidx.compose.foundation.layout.padding
import androidx.compose.foundation.layout.width
import androidx.compose.foundation.shape.RoundedCornerShape
import androidx.compose.material.icons.Icons
import androidx.compose.material.icons.filled.Check
import androidx.compose.material.icons.filled.Delete
import androidx.compose.material3.Button
import androidx.compose.material3.ButtonDefaults
import androidx.compose.material3.HorizontalDivider
import androidx.compose.material3.Icon
import androidx.compose.material3.IconButton
import androidx.compose.material3.OutlinedTextField
import androidx.compose.material3.Text
import androidx.compose.material3.TextButton
import androidx.compose.runtime.Composable
import androidx.compose.runtime.getValue
import androidx.compose.runtime.mutableStateOf
import androidx.compose.runtime.remember
import androidx.compose.runtime.setValue
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.text.font.FontWeight
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp
import androidx.navigation.NavController





@Composable
fun HomeScreen(navController: NavController) {
    var nome by remember { mutableStateOf("") }
    var tarefas by remember { mutableStateOf(listOf<String>()) }
    var aba by remember { mutableStateOf("aFazer") }




    Column(
        modifier = Modifier
            .fillMaxSize()
            .background(Color.White)


    ) {
        Row(
            modifier = Modifier
                .fillMaxWidth()
                .height(60.dp)
                .background(Color(0xFF0D47A1)),
            verticalAlignment = Alignment.CenterVertically



        ) {
            Spacer(modifier = Modifier.width(10.dp))
            Text(
                text = "Tarefas",
                fontSize = 20.sp,
                fontWeight = FontWeight.Bold,
                color = Color.White




            )
        }

        Column(
            modifier = Modifier
                .fillMaxSize()
                .padding(10.dp)
        ) {





            OutlinedTextField(
                value = nome,
                onValueChange = { nome = it },
                label = { Text("Digite a sua tarefa...", fontSize = 20.sp) },
                maxLines = 1,
                modifier = Modifier.fillMaxWidth(),
                shape = RoundedCornerShape(10.dp)
            )





            Spacer(modifier = Modifier.height(10.dp))

            Row(
                modifier = Modifier.fillMaxWidth(),
                horizontalArrangement = Arrangement.SpaceBetween
            ) {



                Button(
                    onClick = {

                    },
                    colors = ButtonDefaults.buttonColors(containerColor = Color(0xFF0D47A1)),
                    modifier = Modifier.weight(1f),
                    shape = RoundedCornerShape(10.dp)
                ) {
                    Text("Adicionar tarefa", fontSize = 16.sp, color = Color.White)
                }

                Spacer(modifier = Modifier.width(10.dp))





                Button(
                    onClick = {
                    },
                    colors = ButtonDefaults.buttonColors(containerColor = Color.Red),
                    modifier = Modifier.weight(1f),
                    shape = RoundedCornerShape(10.dp)
                ) {
                    Text("Apagar tudo", fontSize = 16.sp, color = Color.White)
                }
            }




            Spacer(modifier = Modifier.height(20.dp))




            Row(
                modifier = Modifier.fillMaxWidth(),
                horizontalArrangement = Arrangement.SpaceEvenly
            ) {
                Column(horizontalAlignment = Alignment.CenterHorizontally) {
                    TextButton(onClick = { aba = "aFazer" }) {
                        Text("Tarefas a Fazer ")
                    }
                    if (aba == "aFazer") {
                        HorizontalDivider(
                            thickness = 2.dp,
                            color = Color(0xFF0D47A1),
                            modifier = Modifier.width(130.dp)
                        )
                    }
                }





                Column(horizontalAlignment = Alignment.CenterHorizontally) {
                    TextButton(onClick = { aba = "concluidas" }) {
                        Text(" Tarefas Concluídas ")
                    }



                    if (aba == "concluidas") {
                        HorizontalDivider(
                            thickness = 2.dp,
                            color = Color(0xFF0D47A1),
                            modifier = Modifier.width(100.dp)
                        )
                    }
                }
            }



            Spacer(modifier = Modifier.height(10.dp))



            tarefas.forEachIndexed { index, tarefa ->
                Row(
                    modifier = Modifier
                        .fillMaxWidth()
                        .padding(vertical = 4.dp)
                        .background(Color(0xFFF5F5F5))
                        .padding(8.dp),
                    verticalAlignment = Alignment.CenterVertically,
                    horizontalArrangement = Arrangement.SpaceBetween



                ) {
                    Text(
                        text = "${index + 1} - $tarefa",
                        fontSize = 18.sp,
                        modifier = Modifier.weight(1f)


                    )

                    IconButton(onClick = {

                    }) {
                        Icon(
                            imageVector = Icons.Default.Delete,
                            contentDescription = "Remover",
                            tint = Color.Red
                        )
                    }



                    IconButton(onClick = {

                    }) {
                        Icon(
                            imageVector = Icons.Default.Check,
                            contentDescription = "Concluir",
                            tint = Color.Black
                            
                        )
                    }
                }
            }
        }
    }
}
