  <template>
    <!-- Template del componente formulario-cp -->
  <div  class="container">
    <h1> Ingresa tu Codigo </h1>
    <input v-model="cp">
    <!-- lee el codigo postal en el objeto cp -->
    <button v-on:click="buscacp">Busqueda</button>
    <!-- boton para iniciar la funcion buscacp -->
   <h1> Colonias </h1>
   <h2> Lista </h2>
   <ul>
      <li v-for="item in colonias">
        <!-- bucle que regresa las colonias encontradas en buscacp; identificandolas como "item" -->
         <span style="color:blue" v-bind:colonias="item"> {{ item }}</span>
         <!-- imprime los "item" -->
      </li>
   </ul>
  </div>
  </template>
  <script>
  import axios from 'axios';
//se importa la libreria axios
     export default{
//exporta los componentes/funciones dentro de el
        data(){
        	return {
		          cp: '',
		          colonias:[]
              //lo que se exporta
		    }
        },
        methods:{
          buscacp: function(){
            //Funcion encargada de conectarse al servicio rest, por medio del parametro cp...
          var that=this;
          axios.get('https://api-codigos-postales.herokuapp.com/v2/codigo_postal/'+that.cp)
          .then(function(response){
            that.colonias = response.data.colonias;
            //...Extrae las colonias asociadas al codigo postal
          })
          .catch(function(erro){
            console.log('Error: '+error);
            //captura posibles errores
          });
        }
      }
      }

    </script>
