<template>
    <div>
      <v-container>
        <v-form>
           <v-layout align-center justify-center column class="elevation-2">
             <v-flex xs12 sm6 md12>
                  <v-text-field
                    label="Nome"
                  ></v-text-field>
                </v-flex>
        
                <v-flex xs12 sm6 md12>
                  <v-text-field
                    label="Código do Aluno"
                  ></v-text-field>
                </v-flex>
        
                <v-flex xs12 sm6 md12>
                    <v-text-field
                      label="E-mail"
                    ></v-text-field>
                  </v-flex>

                  <v-flex xs12 sm6 md12>
                    <v-text-field
                      label="Número de Telefone"
                    ></v-text-field>
                  </v-flex>
                  
                  <v-flex xs12 sm6 md12>
                    <v-text-field
                      label="Série"
                    ></v-text-field>
                  </v-flex>

                  <v-flex xs12 sm6 md12>
                      <v-text-field
                      v-model="password"
                      :append-icon="show1 ? 'visibility' : 'visibility_off'"
                      :rules="[rules.required, rules.min]"
                      :type="show1 ? 'text' : 'password'"
                      name="input-10-1"
                      label="Normal with hint text"
                      hint="At least 8 characters"
                      counter
                      @click:append="show1 = !show1"
                      ></v-text-field>
                    </v-flex>

              </v-layout>
            </v-form>
      </v-container>

      <v-layout align-center justify-center>
          <div>
              
                <v-btn color="green">confirmar</v-btn>
            
          </div>
      </v-layout>    
    </div>
</template>'''''''''''''  '
