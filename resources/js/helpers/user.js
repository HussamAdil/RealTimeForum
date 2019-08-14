import Token from './token'
import AppStore from './AppStore'
 

class User {
    login(data)
    {
        axios.post('/api/auth/login' , data)
        .then(res => this.responseAfterLogin(res))
        .catch(error => console.log(error.response))
    }
    responseAfterLogin(res)
    {
        
        const access_token = res.data.access_token
        const username = res.data.user
          if(Token.isValid(access_token))
        {
            
            AppStore.store(access_token , username)
        }
    }
}


export default User = new User();