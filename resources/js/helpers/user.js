import Token from './token'
import AppStore from './AppStore'
 

class User {
    login(data)
    {
        axios.post('/api/auth/login' , data)
        .then(res => this.responseAfterLogin(res))
        .catch(error => error.response)
    }
    responseAfterLogin(res)
    {
        
        const access_token = res.data.access_token
        const username = res.data.user
          if(Token.isValid(access_token))
        {
            
            AppStore.store(access_token , username)
             window.location = '/forum'
        }
        
    }
    hasToken()
    {
        const storedToken = AppStore.getToken()
        if(storedToken)
        {
            return Token.isValid(storedToken) ? true : false
        }
        return false
    }
    loggedIn()
    {
        return this.hasToken()
    }
    logout()
    {
          AppStore.clear()
        return window.location = '/forum'
    }
    name()
    {
        if(this.loggedIn())
        {
             return AppStore.getUser()
        }
    }
    id()
    { 
        if(this.loggedIn())
        {
            const payload =Token.payload(AppStore.getToken())
            return payload.sub 

        }
        
    }
}


export default User = new User();