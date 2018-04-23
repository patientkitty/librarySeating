<template>
    <div>
        <div class="alert alert-warning" v-if="alert!=null">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true" @click="alert=null">&times;</button>
            <strong>Warning!</strong> No such seat Code
        </div>
        <div class="row">
            <div class="col-md-10">
                <input type="text" name="name" id="inputID" class="form-control" value="" title="" required="required" v-model="seatCode">

            </div>
            <div class="col-md-2">
                <a href="#" class="btn btn-primary" @click="search">Search</a>
            </div>
        </div>
        <hr>
        <div class="row">

                    <div class="col-md-4">
                        {{ searchResult.seat_code }}
                    </div>

                    <div class="col-md-4">
                        {{ searchResult.seat_desc }}
                    </div>
                    <div class="col-md-4">
                        {{ searchResult.created_by }}
                    </div>

        </div>
        <hr>
    </div>
</template>
<script>
    export default {
        data(){
            return {
                seatCode:'',
                searchResult:[],
                alert:null,
            }
        },
        methods:{
            search()
            {
                if (this.seatCode  != null )
                {
                    var self = this;
                    axios.get('/search/' + this.seatCode).then(response => {
                        self.searchResult = response.data;
                        console.log(self.searchResult);
                        self.alert = null;
                    }).catch(error =>{
                        self.alert = error;
                    });
                }
            }
        }

    }
</script>