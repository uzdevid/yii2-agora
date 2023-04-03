<?php

namespace uzdevid\agora;

use yii\base\Component;

class Agora extends Component {
    public string $appID;
    public string $appCertificate;

    const RoleAttendee = 0;
    const RolePublisher = 1;
    const RoleSubscriber = 2;
    const RoleAdmin = 101;

    public function buildTokenWithUserAccount($uid, $channel, $role = 0, $expire): string {
        return RtcTokenBuilder::buildTokenWithUserAccount($this->appID, $this->appCertificate, $channel, $uid, $role, $expire);
    }
}