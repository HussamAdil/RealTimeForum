<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="stylesheet" href="{{asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>

    <div id="app">
        <v-app>
          <v-content>
            <v-container> 
                    <v-toolbar>
                            <v-toolbar-title>Title</v-toolbar-title>
                      
                            <v-spacer></v-spacer>
                      
                            <v-toolbar-items>
                              <v-btn text>Link 1</v-btn>
                              <v-btn text>Link 2</v-btn>
                              <v-btn text>Link 3</v-btn>
                            </v-toolbar-items>
                      
                            <template v-if="$vuetify.breakpoint.smAndUp">
                              <v-btn icon>
                                <v-icon>mdi-export-variant</v-icon>
                              </v-btn>
                              <v-btn icon>
                                <v-icon>mdi-delete-circle</v-icon>
                              </v-btn>
                              <v-btn icon>
                                <v-icon>mdi-plus-circle</v-icon>
                              </v-btn>
                            </template>
                          </v-toolbar>
            </v-container>
          </v-content>
        </v-app>
      </div>

<script src="{{asset('js/app.js')}}"></script> 
</body>
</html>