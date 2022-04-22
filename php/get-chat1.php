<?php 
    session_start();
    if(isset($_SESSION['user_id'])){
        require_once "../config_indemnifier.php";



// ---------------------------------------------------------------------

        $outgoing_id = $_SESSION['user_id'];
        // echo $outgoing_id;
        $incoming_id = mysqli_real_escape_string($db, $_POST['incoming_id']);
        // echo $incoming_id;
        $update =  "UPDATE messages set status = 1 where outgoing_msg_id = {$outgoing_id} and incoming_msg_id = {$incoming_id}";
        $query1 = mysqli_query($db, $update);
        $output = "";
        $sql = "SELECT * FROM messages LEFT JOIN users ON users.id = messages.outgoing_msg_id
                WHERE (outgoing_msg_id = {$outgoing_id} AND incoming_msg_id = {$incoming_id})
                OR (outgoing_msg_id = {$incoming_id} AND incoming_msg_id = {$outgoing_id}) ORDER BY msg_id";
        // echo $sql;
        $query = mysqli_query($db, $sql);
        if(mysqli_num_rows($query) > 0){
            $output .= '<div class="chat active-chat" id="chatbox" data-chat="'.$incoming_id.'">';
            while($row = mysqli_fetch_assoc($query)){
                if($row['outgoing_msg_id'] === $outgoing_id){
                    $output .=  '<div class="bubble me">
                    '. $row['msg'] .'
                    </div>';
                }else{
                    $output .= '<div class="bubble you">
                    '. $row['msg'] .'
                    </div>';
                    // $output .= '<div class="chat incoming">
                            
                    //             <div class="details">
                    //             <p>'. $row['msg'] .'</br>'.$row['message_at'].'</p>
                    //             </div>
                    //             </div>';
                }
            }
            $output .= '</div>';
        }else{
            $output .= '<div class="chat active-chat" id="chatbox" data-chat="'.$incoming_id.'">No messages are available. Once you send message they will appear here.</div>';
        }
        echo $output;
    }else{
        header("location: ../login.php");
    }

?>