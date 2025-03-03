import { createApp } from "vue";
import RequestForm from "./components/RequestForm.vue"
import MyRequest from "./components/MyRequest.vue";

const rqform = createApp(RequestForm)
const myrqst = createApp(MyRequest)

rqform.mount("#app");
myrqst.mount("#myrequest");


