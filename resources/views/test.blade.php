 @extends('layouts.panels')
 @section('content')
     <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
         Launch demo modal
     </button>
     <div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                             aria-hidden="true">&times;</span></button>
                     <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                 </div>
                 <div class="modal-body">
                     <select id="select2insidemodal" class="select2Popup">
                         <option>1</option>
                         <option>2</option>
                         <option>3</option>
                         <option>4</option>
                     </select>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                     <button type="button" class="btn btn-primary">Save changes</button>
                 </div>
             </div>
         </div>
     </div>
