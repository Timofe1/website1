import axios from 'axios';
;
// export default axios;

const instance = axios.create({
    baseURL: "http://localhost:3000",

    headers:{
        "Content-type": "application/json"
    }
})

export default instance;