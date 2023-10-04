<div class="modal fade" id="editStatus">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modifier statut</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <div class="basic-form">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label> Professionel :</label>
                               <input class="form-control" type="text" value="{{ $user->name }}" disabled>
                            </div>
                            <div class="form-group col-md-12">
                                <label> Statut* :</label>
                                <select  class="form-control " id="status"  class="selectpicker " data-live-search="true">
                                 <option value="0" @if($user->status == 0) selected @endif >En attente</option>
                                 <option value="1" @if($user->status == 1)selected @endif >Validé</option>
                                 <option value="2" @if($user->status == 2)selected @endif >Annuler</option>
                                </select>
                            </div>
                            <input class="form-control" id="user" type="hidden" value="{{ $user->id }}">
                        </div>
                    </div>
               </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-dismiss="modal">Fermer</button>
                <button type="button" id="updateStatus"  class="btn btn-primary">Mise à jour</button>
            </div>
        </div>
    </div>
</div>
