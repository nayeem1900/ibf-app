<div class="modal animated zoomIn" id="create-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Etender</h5>
                </div>
                <div class="modal-body">
                    <form id="save-form">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-1">

                               

                                <label class="form-label mt-2">Name</label>
                                <input type="text" class="form-control" id="etenderName">

                                <label class="form-label mt-2">Start Date</label>
                                <input type="date" class="form-control" id="sDate">

                                <label class="form-label mt-2">End Date</label>
                                <input type="date" class="form-control" id="eDate">

                                <br/>
                                <img class="w-15" id="newImg" src="{{asset('images/default.jpg')}}"/>
                                <br/>

                                <label class="form-label">Image</label>
                                <input oninput="newImg.src=window.URL.createObjectURL(this.files[0])" type="file" class="form-control" id="etenderImg">

                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button id="modal-close" class="btn bg-gradient-primary mx-2" data-bs-dismiss="modal" aria-label="Close">Close</button>
                    <button onclick="Save()" id="save-btn" class="btn bg-gradient-success" >Save</button>
                </div>
            </div>
    </div>
</div>


<script>



    FillEtenderDropDown();

    async function FillEtenderDropDown(){
        let res = await axios.get("/list-etender")
        res.data.forEach(function (item,i) {
            let option=`<option value="${item['id']}">${item['name']}</option>`
            $("#etenderName").append(option);
        })
    }


    async function Save() {

        
        let etenderName = document.getElementById('etenderName').value;
        let sdate = document.getElementById('sDate').value;
        let edate = document.getElementById('eDate').value;
        let etenderImg = document.getElementById('etenderImg').files[0];

        if (etenderName.length === 0) {
            errorToast("Etender Name is Required !")
        }
        else if(sDate.length===0){
            errorToast("Start date  Required !")
        }
        else if(eDate.length===0){
            errorToast("End Date Required !")
        }
        
        else if(!etenderImg){
            errorToast("Etender Image Required !")
        }

        else {

            document.getElementById('modal-close').click();

            let formData=new FormData();
            formData.append('img',etenderImg)
            formData.append('name',etenderName)
            formData.append('sdate',sDate)
            formData.append('edate',eDate)
            

            const config = {
                headers: {
                    'content-type': 'multipart/form-data'
                }
            }

            showLoader();
            let res = await axios.post("/create-etender",formData,config)
            hideLoader();

            if(res.status===201){
                successToast('Request completed');
                document.getElementById("save-form").reset();
                await getList();
            }
            else{
                errorToast("Request fail !")
            }
        }
    }
</script>
