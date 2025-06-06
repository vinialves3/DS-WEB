package com.example.ativ2

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.activity.enableEdgeToEdge
import androidx.compose.foundation.clickable
import androidx.compose.foundation.layout.*
import androidx.compose.foundation.shape.RoundedCornerShape
import androidx.compose.material3.Card
import androidx.compose.material3.Surface
import androidx.compose.material3.Text
import androidx.compose.runtime.*
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.text.TextStyle
import androidx.compose.ui.tooling.preview.Preview
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp
import com.example.ativ2.ui.theme.Ativ2Theme

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        enableEdgeToEdge()
        setContent {
            Ativ2Theme {
                MyApp()
            }
        }
    }
}

@Composable
fun MyApp() {
    var Compra by remember { mutableStateOf(0) }

    Surface(
        modifier = Modifier
            .fillMaxSize(),
        color = Color(0xFF546E7A)
    ) {
        Column(
            verticalArrangement = Arrangement.Center,
            horizontalAlignment = Alignment.CenterHorizontally,
            modifier = Modifier.fillMaxSize()
        )


        


        {
            Text(
                text = "Produto: Computador",
                style = TextStyle(color = Color.White, fontSize = 28.sp)
            )







            Text(
                text = "Preço: R$2,00",
                style = TextStyle(color = Color.White, fontSize = 24.sp)
            )

            Spacer(modifier = Modifier.height(32.dp))






            Spacer(modifier = Modifier.height(32.dp))


            ComprarBT {
            }
        }
    }
}








@Composable
fun ComprarBT(onClick: () -> Unit) {
    Card(
        modifier = Modifier
            .clickable { onClick() }
            .size(100.dp)
            .padding(10.dp),
        shape = RoundedCornerShape(50.dp),
    ) {





        Box(
            modifier = Modifier.fillMaxSize(),
            contentAlignment = Alignment.Center
        ) {
            Text(
                text = "Comprar",
                color = Color.Black,
                fontSize = 14.sp,
                maxLines = 1
            )
        }
    }
}






// ta dando erro n sei pqqqqqq
@Preview(showBackground = true)
@Composable
fun GreetingPreview() {
    Ativ2Theme {
        MyApp()
    }
}





