 <template>
 <div>
 <tool-bar></tool-bar>
<router-view></router-view>
 <app-footer></app-footer>
 </div>
    
</template>

<script>
import toolBar from './ToolBar' ;
import appFooter from './AppFooter'
import login from './login/Login'
export default {
components:{toolBar , appFooter,login}
}
</script>

<style>

</style>
