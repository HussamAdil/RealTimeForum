class AppStore
{
    storeToken(token)
    {
        localStorage.setItem('token' , token)
    }
    storeUser(user)
    {
        localStorage.setItem('user' , user)
    }
    store(user)
    {
        this.storeToken(token)
        this.storeUser(user)
    }
    clear(token,user)
    { 
        localStorage.removeItem('token')
        localStorage.removeItem('user')
    }
    getToken()
    {
        return localStorage.getItem('token')
    }
    getUser()
    {
        return localStorage.getItem('user')
    }
}
export default AppStore = new User()